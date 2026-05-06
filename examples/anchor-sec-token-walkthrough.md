# Anchor Sec Token Lens Walkthrough

The fixture is intentionally compact, so the review starts with the cases that pull farthest apart.

| Case | Focus | Score | Lane |
| --- | --- | ---: | --- |
| baseline | trust boundary | 209 | ship |
| stress | claim drift | 157 | ship |
| edge | replay exposure | 206 | ship |
| recovery | policy width | 158 | ship |
| stale | trust boundary | 171 | ship |

Start with `baseline` and `stress`. They create the widest contrast in this repository's fixture set, which makes them better review anchors than the middle cases.

`baseline` is the optimistic case; use it to make sure the scoring path still rewards strong signal.
