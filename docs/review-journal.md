# Review Journal

The cases below are the review handles I would use before changing the implementation.

The local checks classify each case as `ship`, `watch`, or `hold`. That gives the project a small review vocabulary that matches its security tooling focus without claiming live deployment or external usage.

## Cases

- `baseline`: `trust boundary`, score 209, lane `ship`
- `stress`: `claim drift`, score 157, lane `ship`
- `edge`: `replay exposure`, score 206, lane `ship`
- `recovery`: `policy width`, score 158, lane `ship`
- `stale`: `trust boundary`, score 171, lane `ship`

## Note

The repository should be understandable without pretending it is larger than it is.
