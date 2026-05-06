# anchor-sec-token-lens

`anchor-sec-token-lens` explores security tooling with a small PHP codebase and local fixtures. The technical goal is to implement a PHP security tooling project for token policy evaluation, using deny and allow fixtures and explainable decision traces.

## Reason For The Project

This is intentionally local and self-contained so it can be inspected without credentials, services, or seeded history.

## Anchor Sec Token Lens Review Notes

The first comparison I would make is `trust boundary` against `claim drift` because it shows where the rule is most opinionated.

## What It Does

- `fixtures/domain_review.csv` adds cases for trust boundary and claim drift.
- `metadata/domain-review.json` records the same cases in structured form.
- `config/review-profile.json` captures the read order and the two review questions.
- `examples/anchor-sec-token-walkthrough.md` walks through the case spread.
- The PHP code includes a review path for `trust boundary` and `claim drift`.
- `docs/field-notes.md` explains the strongest and weakest cases.

## How It Is Put Together

The implementation keeps the scoring rule plain: reward signal and confidence, preserve slack, penalize drag, then classify the result into a review lane.

The PHP code keeps the review rule close to the tests.

## Run It

```powershell
powershell -NoProfile -ExecutionPolicy Bypass -File scripts/verify.ps1
```

## Check It

The verifier is intentionally local. It should fail if the fixture score math, lane assignment, or language-specific test drifts.

## Boundaries

The repository is intentionally scoped to local checks. I would expand it by adding adversarial fixtures before adding features.
